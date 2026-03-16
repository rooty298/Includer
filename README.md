# Includer 
# Laboratorio LFI con Docker

## Contruir imagen Docker
```bash
sudo docker build -t includer .
```
## Ejecutar Contenedor
```bash
sudo docker -d -p 8080:80 -p 2222:22 includer
```
## Comprobar
Visitar: http://localhost:8080/
