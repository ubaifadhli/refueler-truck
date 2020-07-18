var myHeaders = new Headers();
myHeaders.append("Accept", "application/json");
myHeaders.append("Accept-Encoding", "gzip, deflate");
myHeaders.append("Authorization", "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1ZTQ4YjlkZTcwM2ZlMDA4YjA3MDJjMzIiLCJqdGkiOiJmOGQwZDIxNjk0ZTFhYmNlODkxN2RmYjU4ZjU1YjQ3OWYzMzIzNjdiY2UxODEzNWFlMWQwYmQ5NjVhNDY4MDE3MjZiMjhhZWIzNjA5OTFjZCIsImlhdCI6MTU4MTg0Nzk1OSwibmJmIjoxNTgxODQ3OTU5LCJleHAiOjE2MTM0NzAzNTksInN1YiI6IjVlNDhjMmZmZWQ0YmYxNGQ2MjBiYjg1MiIsInNjb3BlcyI6W119.AQuMQ6rg2P5M7rL-G-5dTmxibBjxVsQgNbQI2bN6mbGGKk0IEbZ7kTwJMDxloGilwnYqLaR7PVaY-RsIlgrcCiiZz6Wu53hGL43BYALXx5-EQvxOICTbP-mslMLSYP-5iK7er0sG1P0f8VPA_qbIWQ62Jhu5iKug0svd47pLfakjHYbq_77z8qWpaUzwmqIeoHTgijyOX-fwzrvQTy10Agoz3A_nGTPXdgg2PiWE0vMy1LbbPI2-E0dk0ts2vJHj05eBg4z2TDh04sGasJm4jrwEjcsjd_g5r5x7C36AZ50c1NF71HOvZ2aDvfyQLFSrbaCS8jtm_WbPznFbJnTUh7N3U6ke9OrINBSe0au-bz3OErip1fSa6h-OzPwnTl57bp1AK2LD1hxRxmdHewW9goGr5hP0IfWRBvifkKR1ly4q_Xcpt04oSm4Azs-AfBhxSdeBJDYwJZi5sXboOPzJLDASrUwmBjEX9_WbAasKiD8GdytiGCaYwTtekcX8DypbnIa-qW6E9dOoW28Yti9OQ1vEBbPGvjaMgff65Nmpe-BmnzR6MmBlVcbuFOQJNeOy8P__JuM-w8kej-_51aCg9qi-TJfA3EcXs6PQ0Oi8_Y-eclxW7txc7fiWnebEhY3sS2iSS5lwM9LfMYPBWn6eHzCohPD7bkM-sVLyVvbLeaE");
myHeaders.append("Authorization", "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1ZTQ4YjlkZTcwM2ZlMDA4YjA3MDJjMzIiLCJqdGkiOiJjZDA1ZmU3YWViMWVmYmIyZmI4MmEwYzlmZTc3YjE4OThmMDdiM2ZjN2IwYTFkOTJhOGU2YmU4MzJjYjY1ZjljZDJjOGNmYmRiMWI0NTJjZCIsImlhdCI6MTU4NDI3Mjc5NSwibmJmIjoxNTg0MjcyNzk1LCJleHAiOjE2MTU4MDg3OTQsInN1YiI6IjVlNDhjMmZmZWQ0YmYxNGQ2MjBiYjg1MiIsInNjb3BlcyI6W119.GCWjcwLPA8Bv4w6Mff729axVKHhgFpgB1scGt-IoIQYZYcYL4Rid002MCbYMbL8IOPfcEoBKPu_8XLggP5rkW7e54OdzLdD3FDWXlgmTBiDJ7abqZv93gB_iAD45vTZ_EqWjk56tPhaeMj3ZazFlvdzOotWxIO6hKu_JxbXll1tATQq_Xg_a_MUoM2iEiAaXHILgoUZBMpXKikZxPfAUh5lznfdBaKjcN8jaCEVlIzy-Y_JIr8jCyslXAdFvayEC85vdGGpg3HO0ViZ_HgeS0UrOOimAxP7ZziGlg5mqOo_bf6n_z6yXYl079wHP66NTzO-PhiBfd-IuwGkE6KqyS_RUkbQdUZfxoNLQrj584RrpLdNJ80XcITBCfHBXdaVTj2HYjnylzRq9JoqKHH7iYE29kU1JyBW8DKE70h6lSv5KtE5MKLMTrXnBqJI7n2781C5GlFgcpgWh40yxDDSFbZp8C20RgJxUZ0VLzG0dhbaCki8kBFcPTUKWrBd0H9N8j44g7qBVnyT-hAZc-hwIG5lRJDBpSvLDmoAQYjBJVLjW6nFsDOa2EPYinng2NyuIAcI9THRF4Yh5eOgwaxbd_QFUQuAOyMdmc3LcOCwy3mpMbR0ag-EMJVgKanHostBq2HiU9XSQjKxM4_5-DRm6JUqTr1G_3tDfXp3w41t213E");

var requestOptions = {
  method: 'GET',
  headers: myHeaders,
  redirect: 'follow'
};

fetch("https://art-testserver.herokuapp.com/api/airport", requestOptions)
  .then(response => response.text())
  .then(result => createTable(JSON.parse(result),'table1'))        //.then(result => console.log(result))
  .catch(error => console.log('error', error));