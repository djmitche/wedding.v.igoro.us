s3cmd sync --acl-public --exclude '*.*' --include '*.png' --include '*.jpg' --include '*.ico' --add-header="Expires: Sat, 20 Nov 2020 18:46:39 GMT" --add-header="Cache-Control: max-age=6048000"  site/ s3://wedding.v.igoro.us/
s3cmd sync --acl-public --exclude '*.*' --include '*.js' --include '*.css' --add-header="Cache-Control: max-age=6048000"  site/ s3://wedding.v.igoro.us/
s3cmd sync --acl-public --exclude '*.*' --include '*.html' --add-header="Cache-Control: max-age=7200, must-revalidate"  site/ s3://wedding.v.igoro.us/
s3cmd sync --acl-public --exclude '*.*' --include '*.php' --add-header="Content-Type: text/html" --add-header="Cache-Control: max-age=7200, must-revalidate"  site/ s3://wedding.v.igoro.us/
