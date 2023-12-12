import json

USERS = {}
USERNAMES = []

with open('data/datas.json', 'r') as userFile :
    USERS = json.load(userFile)
    USERNAMES = list(USERS.keys())