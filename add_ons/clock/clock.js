function format(number)
{
    return number > 9 ? ""+number : "0"+number;
}

function getcurrenttime()
{
    var pattern = "yyyy/MM/dd <br/> hh:mm:ss";
    currentdate = new Date();
  pattern = pattern.replace(/yyyy/,currentdate.getFullYear())
    .replace(/MM/,format(currentdate.getMonth()+1))
    .replace(/dd/,format(currentdate.getDate()))
    .replace(/hh/,format(currentdate.getHours()))
    .replace(/mm/,format(currentdate.getMinutes()))
    .replace(/ss/,format(currentdate.getSeconds()));

  return pattern;
}



