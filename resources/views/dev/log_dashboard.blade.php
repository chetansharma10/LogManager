@extends('layouts.dev.dashboard.main')

@section('title',"👩‍💻 Log Dashboard")

@section('logcss',"/css/logs1.css")

@section('name',$LoggedDevData['name'])

@section('teamkey',$LoggedDevData['teamkey'])

@section('email',$LoggedDevData['email'])

@section('disc',$LoggedDevData['discAboutDev'])

@section('content') 

<div class="contentArea">   
   
   <div class="logContainer" >

      <div class="logBar">
         <p class="logMessage">
            @if($apicall['message'])
                {{ $apicall['message'] }} 
                {{-- {{ $LoggedDevData['username']."@".$LoggedDevData['serverip'] }} --}}
            @else{ "Not Able Fetch Data" }   
            @endif
         </p>
         <div class="iconsLogs">
            <button class="zoomIn" onclick="ZoomIn()"><i class="fa fa-search-plus"></i></button>
            <button class="zoomOut" onclick="ZoomOut()"><i class="fa fa-search-minus"></i></button>
         </div>
      </div>

      <div id="logs" >
      </div>  
        
   </div>


      
 
      

</div>
    


<script>
   const log = @json($apicall);
   var logs=document.getElementById('logs');
   let orignalFontSize=13;

   function ZoomIn() {
      orignalFontSize+=1;
      logs.style.fontSize=orignalFontSize+"px";
   }

   function ZoomOut() {
      if(orignalFontSize>13){
         orignalFontSize-=1;
         logs.style.fontSize=orignalFontSize+"px";
      }

   }
   
   const getLengthOfDate=(str)=>{

      // I Had Added 1 for this bracket ] .
      return str.length>0?str.split("]")[0].length+1:0;
   }



   
   
   





   let data;
   let  output="";

   if(log['succ']==1)
   {
      for(data of log['output'].split('\n'))
      {
         let getDate=data.substr(0,getLengthOfDate(data));
         let remPortion=data.substr(getLengthOfDate(data),data.length).trim();
         let component=`<div class="log">
                        <div class="datex">${getDate}</div>
                        <div class="remPortion">${remPortion}</div>
                     </div>`;

         output+=component+"<br>";
      }
   }
   else
   {
      output+=log['status'];
   }
   
   logs.innerHTML=output;
</script>






@endsection 