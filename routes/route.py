from BClima import app, mydb
from flask import jsonify, request

@app.route('/home')
def home():
    return render_template('hello.html')
