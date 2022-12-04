<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# API Documentation 

# API Documentation 

### Login 
- Method     : POST 
Request:
  - Method : GET
  - Endpoint : http://127.0.0.1:8000/api/auth/login
  - Header : 
  
          Accept: application/json
          Content-Type: application/json
  
  - Body   : 
  
          email: admin@gmail.com
          password: ******
          device_name: web
  
  - Respone:

    {
        "message": "success",
        "data": {
            "id": 1,
            "name": "mulyadiarman",
            "email": "mulyadiarman18@gmail.com",
            "email_verified_at": null,
            "is_admin": 1,
            "photo": null,
            "created_at": "2022-12-04T05:21:58.000000Z",
            "updated_at": "2022-12-04T05:21:58.000000Z"
    },
    "meta": {
        "token": "2|1idNM42Q99GWBGq6U9edE8aCGH0e5HL21dErAEEt"
    }

        
   - Code : 
   
   
         200 
