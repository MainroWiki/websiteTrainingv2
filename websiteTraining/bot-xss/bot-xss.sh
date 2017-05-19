while sleep 5; do /root/phantomjs-2.1.1-linux-x86_64/bin/phantomjs --ignore-ssl-errors=true --local-to-remote-url-access=true --web-security=false --ssl-protocol=any /usr/bot-xss/xss-bot.js; done;
