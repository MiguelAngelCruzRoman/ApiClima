from faker import Faker
from pymongo import MongoClient
from bson import ObjectId
from datetime import datetime, timedelta
import random

client = MongoClient('mongodb+srv://YoMero:Contrasenia.Segura.123@yomerocluster.eit2hnw.mongodb.net/?retryWrites=true&w=majority&appName=YoMeroCluster')
db = client['apiHotel']
collection_comentarios = db['comentarios']
collection_hoteles = db['hoteles']
collection_clientes = db['clientes']

fake = Faker('es_MX')

data_comentarios = []

hoteles_ids = [hotel['_id'] for hotel in collection_hoteles.find()]
clientes_ids = [cliente['_id'] for cliente in collection_clientes.find()]

for _ in range(200): 
    id_hotel = random.choice(hoteles_ids)
    id_cliente = random.choice(clientes_ids)
    
    calificacion = random.randint(1, 5)  
    comentario = fake.text()
    fecha = fake.date_time_between(start_date='-1y', end_date='now')
    
    comentario_data = {
        'id_Hotel': id_hotel,
        'id_Cliente': id_cliente,
        'calificacion': calificacion,
        'comentario': comentario,
        'fecha': f"{random.randint(2010, 2030)}-{random.randint(1, 12):02d}-{random.randint(1, 28):02d}"
    }
    data_comentarios.append(comentario_data)

collection_comentarios.insert_many(data_comentarios)

print("Datos de comentarios insertados exitosamente.")
