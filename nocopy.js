function disableselect(e) {             
          return false 
      } 
      function reEnable() { 
          return true 
      } 

      document.onselectstart = new Function("return false") 

      if (window.sidebar) { 
          document.onmousedown = disableselect                    // for mozilla           
          document.onclick = reEnable 
      } 

      function clickIE() { 
          if (document.all) { 
              (message); 
              return false; 
          } 
      } 


      document.oncontextmenu = new Function("return false") 

      var element = document.getElementById('tbl'); 

      element.onmousedown = function () { return false; }
