$(document).ready(function(){
    
    var prevModel = '';
    var nextModel = '';
    
    var prevModelIndex = modelList.findIndex(x => x === currentModel);
    if(prevModelIndex == 0){
        prevModel = modelList[modelList.length-1];
        nextModel = modelList[1];
    }else if(prevModelIndex == (modelList.length-1)){
        prevModel = modelList[modelList.length-2];
        nextModel = modelList[0];
    }
    else if(0 < prevModelIndex < (modelList.length-1)){
        prevModel = modelList[prevModelIndex-1];
        nextModel = modelList[prevModelIndex+1];
    }
    $('#prevUrl').attr("href","/content/product_"+prevModel+".html");
    $('#prevImg').attr("src","/common/img/product/other_product_"+prevModel+".jpg");
    $("#prevImg").attr("onmouseover","this.src='/common/img/product/hover/"+prevModel+"-prev.jpg'");
    $("#prevImg").attr("onmouseout","this.src='/common/img/product/other_product_"+prevModel+".jpg'");

    $('#nextUrl').attr("href","/content/product_"+nextModel+".html");
    $('#nextImg').attr("src","/common/img/product/other_product_"+nextModel+".jpg");
    $("#nextImg").attr("onmouseover","this.src='/common/img/product/hover/"+nextModel+"-next.jpg'");
    $("#nextImg").attr("onmouseout","this.src='/common/img/product/other_product_"+nextModel+".jpg'");
});