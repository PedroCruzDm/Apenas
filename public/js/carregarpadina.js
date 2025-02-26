export function CarregarPagina(){

    let Carregar_Header = () => {
        if (document.getElementsById('header') != null) {
            document.getElementsById('header').innerHTML = "<p style='color:black;'>Carregando...</p>";
                
            try{
                fetch('/include/header.php').then((Response) => {
                    Response.text().then((data) => {
                    document.getElementById('header').innerHTML = data;
                    });
                });
    
            }catch(e){
                console.error(e);
                CarregarHeader();
                return;
            }
        }
    }
        
    let Carregar_Footer = () => {
        if (document.getElementById('footer') != null) {
            document.getElementById('footer').innerHTML = "<p style='color:white;'>Carregando...</p>";
                
            try{
                fetch('/include/footer.php').then((ResponseFooter) => {
                    ResponseFooter.text().then((data) => {
                    document.getElementById('footer').innerHTML = data;
                    });
                });
    
            }catch(e){
                console.error(e);
                CarregarFooter();
                return;
            }
        }
    }
    //#endregion
        
    Carregar_Header();
    Carregar_Footer();
    }