from BaseHTTPServer import BaseHTTPRequestHandler, HTTPServer
import cgi , MySQLdb

"""
        Madame Mishu  propose des cours en hacking,
        ....  Mme Mishu vous mets au defi
        de lancer un webshell sur son serveur 

"""



ROOT = "/Users/Amine/"
PORT = 80
IP   ='0.0.0.0'

class Handler(BaseHTTPRequestHandler):
        def _set_headers(self):
                self.send_response(200)
                self.send_header('Content-type', 'text/html')
                self.end_headers()

        def do_GET(self):
                if self.path=="/":
                        self.path=ROOT+"index.html"
                        contentType="text/html"
                        f=open(self.path)
                        self.send_response(200)
                        self.send_header('Content-type', contentType);
                        self.end_headers()
                        self.wfile.write(f.read())
                        f.close()


                return


        def do_POST(self):
                self._set_headers()
                form = cgi.FieldStorage( fp=self.rfile,headers=self.headers,environ={'REQUEST_METHOD': 'POST'})
                course=form.getvalue("course")
                p = open(ROOT+'config.txt')
                usr = p.readline().strip()
                pas = p.readline().strip()
                p.close()
                db = MySQLdb.connect(host="localhost", user=usr, passwd=pas, db="mishu")
                cur = db.cursor()
                query = "SELECT *  FROM SECURITY_COURSES where title='"+course+"'"
                print query
                cur.execute(query);
                self.wfile.write("<html>")
                self.wfile.write("<body><h1>The informations related to your course are :</h1>")
                for row in cur.fetchall():
                        title = row[1]
                        price = row[2]
                        self.wfile.write("<h2>Course Tiltle : "+title+" </h2>")
                        self.wfile.write("<h2>Course Price  : "+price+" </h2>")
                self.wfile.write("</body></html>")
                db.close()



if __name__=="__main__":
        HTTPServer((IP,PORT), Handler).serve_forever()
