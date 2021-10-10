const url = "ID3_json.php";

response();


function response(){
    fetch(url)
    .then((res)=>res.json())
    .then((data)=>{
        for(const property in data){
            /*informacje jakie mozna pobrac:
            "bitrate"
            "fileformat"
            "filename"
            "filenamepath"
            "filepath"
            "filesize"
            "mime_type"
            "playtime_seconds"
            "playtime_string"
            */
           
            //tu przykaldy jak pobierac informacje:
            //console.log(data[property]['filename']); 
            //console.log(data[property]['playtime_string']); 
        }
    });
}