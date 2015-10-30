server {
    listen  80;

    root {{ nginx.docroot }};
    index app.php;

    server_name {{ nginx.servername }};

    location / {
        try_files $uri $uri/ /app.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass unix:/var/run/php5-fpm.sock;
        fastcgi_index app.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
