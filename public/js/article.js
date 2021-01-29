

function view_sommaire()
{
    var disp = document.getElementById('sommaire_article');
    console.log(disp.classList.toggle("d-none"));
    disp.classList.toggle("d-none");
    disp.classList.toggle("d-none") ? disp.style.opacity = 0 : disp.style.opacity = 1;  
};

function view_article(id)
{
    var disp = document.getElementById('sommaire_article');
    disp.classList.add("d-none");
    var article = document.getElementById('article_' + id);
    var other_article = document.getElementsByClassName('article');
    console.log(other_article);
    if(other_article.length != 0)
    {

        for(let i = 0;i < other_article.length; i++)
        {
            other_article[i].classList.add("d-none");
            other_article[i].style.opacity = 0;
        }
        
    }
    console.log(article.classList.toggle("d-none"));
    article.classList.remove("d-none");
    article.style.opacity = 1;
      
};