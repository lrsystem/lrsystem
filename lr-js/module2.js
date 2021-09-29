window.onload = function dhbhbuhbhug(){
    theme;
    if(theme == "1"){
        var head = document.getElementsByTagName('HEAD')[0]; 
  
        // Create new link Element
        var link = document.createElement('link');
  
        // set the attributes for link element 
        link.rel = 'stylesheet'; 
      
        link.type = 'text/css';
      
        link.href = '../css/bootstrap/bootstrap.css'; 
  
        // Append link element to HTML head
        head.appendChild(link); 
        
    }else{
        var heado = document.getElementsByTagName('HEAD')[0]; 
  
        // Create new link Element
        var linko = document.createElement('link');
  
        // set the attributes for link element 
        linko.rel = 'stylesheet'; 
      
        linko.type = 'text/css';
      
        linko.href = '../css/mdb.min.css'; 
  
        // Append link element to HTML head
        heado.appendChild(linko); 
        
    }

}