# Import BeautifulSoap & requests & mysql connector
from bs4 import BeautifulSoup
import requests
import mysql.connector
import json

# Import os library for folder reading
import os

# Folder Reference 
current = os.path.dirname(os.path.abspath("__file__"))
folder = os.path.join(current, 'scripts\in')

# Theme name
theme = 'theme1'

# Database Connection Details
db = mysql.connector.connect(
  host="localhost",
  user="root",
  password="0147",
  database="kia"
)

cursor = db.cursor()
sql = "INSERT INTO contents (folder, file, content, post_status, access_level, version, created_by, created_at) VALUES (%s, %s, %s, 1, 1, 1, 1, '2023-08-01 00:00')"


# Layout File Name
layoutFile = open(os.path.join(current, 'resources/views/layouts/'+theme+'.blade.php'), 'w')

# Create pages folder if not exist
os.mkdir(os.path.join(current, 'resources/js/pages'))


# List html files in the folder
files = os.listdir(folder)


# List through each file
for file in files:
    # Check for files
    if os.path.isfile(folder+"/"+file) and file.endswith('.html'):
        # Opening the html file
        htmlFile = open(folder+"/"+file, "r", encoding='utf-8')

        # Read the content from the file
        html = htmlFile.read()
        
        # Get the soup object for readings
        soup = BeautifulSoup(html, 'html.parser')

        # Get head element if its index file
        if file.endswith('index.html'):

            # Starts writing layout file
            layoutFile.write('<!DOCTYPE html>')
            layoutFile.write('<html>\n')
            layoutFile.write('<head>\n')

            # get the head element
            head = soup.head

            # Read all meta tags
            metas = head.find_all('meta')
            for meta in metas:
                layoutFile.write(str(meta)+'\n')
            

            
            # Read all link tags
            links = head.find_all('link')
            for link in links:
                link['href'] = "{{ url('"+link['href']+"') }}"
                layoutFile.write(str(link)+'\n')
            
            # Read all title tags
            titles = head.find_all('title')
            for title in titles:
                layoutFile.write(str(title)+'\n')
            
            
            # Read all script tags
            scripts = head.find_all('script')
            for script in scripts:
                script['src'] = "{{ url('"+script['src']+"') }}"
                layoutFile.write(str(script)+'\n')
            
            
            # Ending writing layout file Head section
            layoutFile.write('<meta name="csrf-token" content="{{ csrf_token() }}">')
            layoutFile.write("@vite(['resources/sass/app.scss', 'resources/js/app.js'])")
            layoutFile.write("@routes")
            layoutFile.write('</head>\n')

        # Start Reading Body Tag
        body = soup.body
        layoutFile.write("<body id='app'>\n")

        # Start Reading Menu

        # Writing separate page files
        pageName = 'welcome' if file.endswith('index.html') else os.path.basename(file).replace(".html", "")
        pageFile = open(os.path.join(current, 'resources/views/'+pageName+'.blade.php'), 'w')

        

        pageFile.write("@extends('layouts."+theme+"')\n")
        pageFile.write("@section('content')\n")

        # VueMainFile File Name
        vueMainFile = open(os.path.join(current, 'resources/js/pages/'+pageName.capitalize()+'.vue'), 'w')
        vueMainFile.write('<template>\n')
        

        # Sections reading
        sections = body.children
        sectionNo = 1

        importStatements = ''
        components = 'components: {\n'

        for section in sections:
            if str(section.name) == 'section':
                # Empty JSON Object
                content = {}

                # Create pages sub-folder for page if not exist
                try:
                    os.mkdir(os.path.join(current, 'resources/js/pages/'+pageName))
                except OSError as error:
                    print("Directory can not be created..")


                # Write Content to DB
                h1s = section.find_all('h1')
                index = 1;
                for h1 in h1s:
                    content['h1_'+str(index)] = ""+h1.text+""
                    h1.string.replace_with("{{ contents[0]."+'h1_'+str(index)+" }}")
                    index = index + 1

                h2s = section.find_all('h2')
                index = 1;
                for h2 in h2s:
                    content['h2_'+str(index)] = ""+h2.text+""
                    h2.string.replace_with("{{ contents[0]."+'h2_'+str(index)+" }}")
                    index = index + 1
                
                h3s = section.find_all('h3')
                index = 1;
                for h3 in h3s:
                    content['h3_'+str(index)] = ""+h3.text+""
                    h3.string.replace_with("{{ contents[0]."+'h3_'+str(index)+" }}")
                    index = index + 1
                
                h4s = section.find_all('h4')
                index = 1;
                for h4 in h4s:
                    content['h4_'+str(index)] = ""+h4.text+""
                    h4.string.replace_with("{{ contents[0]."+'h4_'+str(index)+" }}")
                    index = index + 1
                
                h5s = section.find_all('h5')
                index = 1;
                for h5 in h5s:
                    content['h5_'+str(index)] = ""+h5.text+""
                    h5.string.replace_with("{{ contents[0]."+'h5_'+str(index)+" }}")
                    index = index + 1

                h6s = section.find_all('h6')
                index = 1;
                for h6 in h6s:
                    content['h6_'+str(index)] = ""+h6.text+""
                    h6.string.replace_with("{{ contents[0]."+'h6_'+str(index)+" }}")
                    index = index + 1
                
                ps = section.find_all('p')
                index = 1;
                for p in ps:
                    content['p_'+str(index)] = ""+p.text+""
                    p.string.replace_with("{{ contents[0]."+'p_'+str(index)+" }}")
                    index = index + 1
                
                spans = section.find_all('span')
                index = 1;
                for span in spans:
                    content['span_'+str(index)] = ""+span.text+""
                    span.string.replace_with("{{ contents[0]."+'span_'+str(index)+" }}")
                    index = index + 1

                aTags = section.find_all('a')
                index = 1;
                for a in aTags:
                    if a.string is not None:
                        content['button_'+str(index)] = {"text": a.text, "link": a['href'], "open": "_self"}
                        a.string.replace_with("{{ contents[0]."+'button_'+str(index)+".text }}")
                        a[':href'] = "contents[0]."+"button_"+str(index)+".link"
                        a[':target'] = "contents[0]."+"button_"+str(index)+".open"
                        index = index + 1

                # Save Data contents in DB
                content_arr = [content]
                json_content = json.dumps(content_arr)
                val = (pageName, 'Section'+str(sectionNo), json_content)
                cursor.execute(sql, val)
                db.commit()
                print(cursor.rowcount, "record inserted.")

                # VueFile File Name
                vueFile = open(os.path.join(current, 'resources/js/pages/'+pageName+'/Section'+str(sectionNo)+'.vue'), 'w')

                vueFile.write('<template>\n')
                vueFile.write('<block folder="'+pageName+'" file="Section'+str(sectionNo)+'" #default="{ contents }">\n')
                vueFile.write(str(section)+'\n')
                vueFile.write('</block>\n')
                vueFile.write('</template>\n')
                vueFile.write('<script>\n')
                vueFile.write('\n')
                vueFile.write('export default {\n')
                vueFile.write('\n')
                vueFile.write('}\n')
                vueFile.write('</script>\n')

                vueFile.close()
                vueMainFile.write("<Section"+str(sectionNo)+"/>\n")
                importStatements = importStatements + "import "+"Section"+str(sectionNo)+" from './"+pageName+"/"+"Section"+str(sectionNo)+".vue';\n"
                components = components + "Section"+str(sectionNo)+",\n"
                sectionNo = sectionNo + 1

        # Finishing VueMainFile content
        
        
        components = components + '}\n'

        vueMainFile.write('</template>\n')
        vueMainFile.write('<script>\n')
        vueMainFile.write(importStatements+'\n')
        vueMainFile.write('\n')
        vueMainFile.write('export default {\n')
        vueMainFile.write(components+'\n')
        vueMainFile.write('}\n')
        vueMainFile.write('</script>\n')

        vueMainFile.close()

        #sections = body.find_all('section')
        #for section in sections:
        #    pageFile.write("<example-component/>\n")
        
        pageFile.write("<"+pageName+"/>\n")

        # Write yield element within the body tag.
        layoutFile.write("@yield('content')\n")
        pageFile.write("@endsection\n")
        pageFile.close()

        # Read all script tags
        scripts = body.find_all('script')
        for script in scripts:
            script['src'] = "{{ url('"+script['src']+"') }}"
            layoutFile.write(str(script)+'\n')

        layoutFile.write("</body>\n")
        # Ending the layout file 
        layoutFile.write('</html>\n')

        
layoutFile.close()
