## INSTALL

git clone https://github.com/mudapa/Simple-login-ci4.git

create database, name = login-ci4

php spark migrate

php spark db:seed GlobalSeeder

php spark serve


## Admin
email = admin@admin.com
password = 1234

## Dosen
email = dosen@dosen.com
password = 1234

## Mahasiswa
email = mhs@mhs.com
password = 1234
