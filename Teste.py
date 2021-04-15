import requests

url = "https://api.tomticket.com/criar_acesso_cliente/a4b0698d6c9cd15d23d576d760957cb0"

payload={'identificador': 'ricardo.emiliano@crd.med.br',
'tipo_identificacao': '1'}
files=[

]
headers = {
  'Cookie': '__cfduid=d27ed10dc4b605ca1270b696b0ef39aeb1618424191'
}

response = requests.request("POST", url, headers=headers, data=payload, files=files)

print(response.text)