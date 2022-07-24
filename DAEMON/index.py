from flask import *
import time
app = Flask(__name__)

@app.route('/')
def index():
    time.sleep(2)
    return 'There was an error while waiting for the server response. Please try again.'
@app.errorhandler(404)
def pagenotfound(e):
    time.sleep(2)
    return 'There was an error while waiting for the server response. Please try again.'
if __name__ == '__main__':
    app.run(debug=True, port="8081", host="0.0.0.0")