import argparse
import json
import csv
import uuid

def main() :
    parser = argparse.ArgumentParser()
    parser.add_argument('command', choices=['initjson'], help="Permet de générer le json model avec la population")
    parser.add_argument('-f', '--file', help='Chemin de destination du nouveau json', default='data/datas.json')
    parser.add_argument('-s', '--source', help='Chemin d\'un csv source [nom;prenom]')
    args = parser.parse_args()

    if args.command == 'initjson':
        initjson(args)

def initjson(args) :
    dataPath = args.file
    if not(args.source) :
        print('La source doit etre spécifié pour initialiser le JSON.')
        exit(1)

    sourcePath = args.source

    with open(sourcePath, 'r') as csvFile :
        sourceDataReader = csv.reader(csvFile, delimiter=';')
        
        sourceData = {}

        for row in sourceDataReader :
            sourceData[str(uuid.uuid4())] = {
                'anno_id' : str(uuid.uuid4()),
                'lastname' : row[0][0],
                'firstname' : row[1],
                'mlv' : 0,
                'aig' : 0
            }

    with open(dataPath, 'w') as jsonFile :
        json.dump(sourceData, jsonFile, indent=4)
    exit(0)
    
if __name__ == '__main__':
    main()