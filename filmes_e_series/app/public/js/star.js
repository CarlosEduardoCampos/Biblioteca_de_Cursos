function on_star(n)
{
    if(Number(n) == 1)
    {
        document.getElementById("star01").src = "../-img-/star03.png"
    }
    if(Number(n)== 2)
    {
        document.getElementById("star01").src = "../-img-/star03.png"
        document.getElementById("star02").src = "../-img-/star03.png"
    }
    if(Number(n)== 3)
    {
        document.getElementById("star01").src = "../-img-/star03.png"
        document.getElementById("star02").src = "../-img-/star03.png"
        document.getElementById("star03").src = "../-img-/star03.png"
    }
    if(Number(n)== 4)
    {
        document.getElementById("star01").src = "../-img-/star03.png"
        document.getElementById("star02").src = "../-img-/star03.png"
        document.getElementById("star03").src = "../-img-/star03.png"
        document.getElementById("star04").src = "../-img-/star03.png"
    }
    if(Number(n)== 5)
    {
        document.getElementById("star01").src = "../-img-/star03.png"
        document.getElementById("star02").src = "../-img-/star03.png"
        document.getElementById("star03").src = "../-img-/star03.png"
        document.getElementById("star04").src = "../-img-/star03.png"
        document.getElementById("star05").src = "../-img-/star03.png"
    }
}

function off_star()
{
    document.getElementById("star01").src = "../-img-/star01.png"
    document.getElementById("star02").src = "../-img-/star01.png"
    document.getElementById("star03").src = "../-img-/star01.png"
    document.getElementById("star04").src = "../-img-/star01.png"
    document.getElementById("star05").src = "../-img-/star01.png"
}