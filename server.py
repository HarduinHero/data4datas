# Import necessary modules from Flask
from flask import Flask, render_template

# Create a Flask application
app = Flask(__name__)

# Define a route for the root URL
@app.route('/')
def index():
    # Render the 'index.html' template
    return render_template('index.html')

# Run the Flask application
if __name__ == '__main__':
    app.run(debug=True)
