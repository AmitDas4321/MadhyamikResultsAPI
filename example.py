import requests
import json

# API Endpoint and Parameters
url = 'https://api.linkpc.net/WBBSE/Madhyamik-Results/'
params = {
    'roll_no': '601382N0010',
    'dob': '2008-08-14'
}

# Send GET request
response = requests.get(url, params=params)

# Handle response
if response.status_code == 200:
    try:
        result = response.json()
        print(json.dumps(result, indent=2))  # Nicely formatted output
    except ValueError:
        print(json.dumps({
            'status': 'error',
            'message': 'Invalid JSON response from server.'
        }))
else:
    print(json.dumps({
        'status': 'error',
        'message': f'HTTP {response.status_code}: {response.text}'
    }))
