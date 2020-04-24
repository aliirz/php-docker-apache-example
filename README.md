## PHP Endpoint for Kobo Test


#### How does it work?

```bash
# build the docker image
docker build -t php-kobotest .

# run the docker container on this machine. Expose its internal
# port 80 to this machine's port 8080
docker run -d -p 8080:80 php-kobotest
```

