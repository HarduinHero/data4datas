# Import necessary modules from Flask
from flask import Flask, render_template, request, redirect
from users import USERS, USERNAMES

# Create a Flask application
app = Flask(__name__)

# Define a route for the root URL
@app.route('/')
def index():
    return render_template('question.html', users=USERS)

@app.route('/conn')
def connect() :
    pass

@app.route('/resultats')
def resultats() :
    return render_template('result.html')

@app.route('/processResp', methods=['POST'])
def processResp() :
    print(request.form)


# Run the Flask application
if __name__ == '__main__':
    app.run(debug=True)
