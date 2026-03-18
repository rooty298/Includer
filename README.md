# Includer
Laboratorio LFI con Docker

## Clonar el repositorio, construir y ejecutar
```bash
git clone https://github.com/rooty298/Includer.git
cd Includer
docker build -t includer .
docker run -d -p 8080:80 -p 2222:22 includer
```
# Probar
```bash
nmap -p 2222,8080 localhost
```
# Probar en el navegador
```
http://localhost:8080/
```
