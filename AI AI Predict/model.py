import numpy as np
import pandas as pd
from sklearn.preprocessing import MinMaxScaler
from tensorflow.keras.models import load_model
from datetime import datetime, timedelta

class Model:
    def __init__(self, path_model):
        self.model = load_model(path_model)
        self.last_date = datetime(2024, 4, 28)  
        self.predicted_prices = []
        self.response = {
            "data": []
        }

    def reset(self, available=True):
        if available:
            self.response = {
                "data":[]
            }
            self.predicted_prices = []
        
        return True
        
    def load_dataset(self, path):
        data = pd.read_csv(path)
        
        # Pastikan data diurutkan berdasarkan tanggal
        data['Tanggal_Panen'] = pd.to_datetime(data['Tanggal_Panen'])
        data = data.sort_values('Tanggal_Panen')

        # Hanya ambil kolom yang diperlukan
        df = data[['Tanggal_Panen', 'Harga']]

        # Konversi tanggal ke integer hari sejak awal dataset
        df['hari'] = (df['Tanggal_Panen'] - df['Tanggal_Panen'].min()).dt.days

        dataset, scaler = self.preprocess_data(df)
        return (dataset, scaler)
    
    def konversi_tanggal(self, hari, predict=False):
        if predict:
            tanggal_hasil = self.last_date + timedelta(days=hari)
        else:
            tanggal_hasil = self.last_date - timedelta(days=hari)
        return tanggal_hasil
        
    def preprocess_data(self, df):
        dataset = df['Harga'].values.reshape(-1, 1)
        scaler = MinMaxScaler(feature_range=(0, 1))
        dataset = scaler.fit_transform(dataset)
        return dataset, scaler
    
    def predicted(self, jumlah_hari, last_dataset):
        X_input = np.reshape(last_dataset, (1, last_dataset.shape[0], 1))
        
        for _ in range(jumlah_hari):
            next_day_prediction = self.model.predict(X_input)
            
            self.predicted_prices.append(next_day_prediction)
            
            X_input = np.append(X_input[:,1:,:], next_day_prediction.reshape(1,1,1), axis=1)

        return self.predicted_prices
    
    def date_input(self, date):
        input_date = pd.to_datetime(date)
        forecast_periods = (input_date - self.last_date).days
        return forecast_periods
            
    def __getitem__(self, argument):
        prediction = self.predicted(argument["jumlah_hari"], argument["last_dataset"])
        
        inverse_predict = argument["scaler"].inverse_transform(np.array(prediction).reshape(-1, 1))
        
        for i in range(len(inverse_predict)):
            tanggal = self.konversi_tanggal(i+1, predict=True)
            
            self.response["data"].append({
                "date": tanggal, 
                "price": f"Rp{int(inverse_predict[i][0])}"
            })
            
        last_data = self.response["data"][-1]
        self.response["max_date"] = last_data["date"]
        
        return self.response

# Contoh penggunaan:
# model = Model('lstm_model.h5')
# dataset, scaler = model.load_dataset('static/dataset/Harga_Cabai_Jawa_2020_2024.csv')
# last_30_days = dataset[-30:]
# response = model.__getitem__({"jumlah_hari": 30, "last_dataset": last_30_days, "scaler": scaler})
# print(response)
