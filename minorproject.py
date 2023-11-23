from flask import *
import datetime
from mongodb3 import MongoDBHelper
import hashlib
from bson.objectid import ObjectId


web_app = Flask("Foodie Express")


@web_app.route("/")
def index():

    return render_template('index.html')


@web_app.route("/register")
def register():
    return render_template('register1.html')


@web_app.route("/raja")
def menu_raja():
    return render_template('home2.html')


@web_app.route("/home")
def home():
    return render_template('home.html')


@web_app.route("/register-customer", methods=['POST'])
def register_customer():

    customer_data = {
        'email': request.form['email'],
        'password': hashlib.sha256(request.form['password'].encode('utf-8')).hexdigest(),
        'city': request.form['city'],
        'createdOn': datetime.datetime.today()
    }

    print(customer_data)
    db = MongoDBHelper(collection="xyz")


    result = db.insert(customer_data)


    customer_id = result.inserted_id
    session['customer_id'] = str(customer_id)
    session['customer_email'] = customer_data['email']

    return render_template('/home', email=session['customer_email'])


@web_app.route("/login-customer", methods=['POST'])
def login_customer():

    customer_data = {
        'email': request.form['email'],
        'password': hashlib.sha256(request.form['pswd'].encode('utf-8')).hexdigest(),
    }

    print(customer_data)
    db = MongoDBHelper(collection="customerfood")
    documents = db.fetch(customer_data)
    print(documents, type(documents))
    if len(documents) == 1:
        session['customer_id'] = str(documents[0]['_id'])
        session['customer_email'] = documents[0]['email']
        session['customer_name'] = documents[0]['name']
        print(vars(session))
        return render_template('/home')
    else:
        return render_template('/home')


@web_app.route("/logout")
def logout():
    session['customer_id'] = ""
    session['customer_email'] = ""
    return redirect("/")


if _name_ == "_main_":
    web_app.run(port="5003")
