from flask import Flask, escape, request
from flask_cors import CORS
import decimal
import flask.json
import os

mydb = {
    "host":"localhost",
    "user":"rasp",
    "password":"cactus",
    "database":"rasp_web",
    "auth_plugin":'mysql_native_password'
}

class MyJSONEncoder(flask.json.JSONEncoder):
    def default(self, obj):
        if isinstance(obj, decimal.Decimal):
            #Convierte instancias decimales en strings
            return int(obj)
        return super(MyJSONEncoder, self).default(obj)

app = Flask(__name__)
CORS(app)
app.json_encoder = MyJSONEncoder

from routes.route import *

if __name__=="__main__":
    app.debug = False
    host = os.environ.get('IP','127.0.0.1')
    port = int(os.environ.get('PORT',5000))
    app.run(host = host, port=port)