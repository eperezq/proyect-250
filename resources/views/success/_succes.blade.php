

 @if (session()->has('message-create'))
    <div class="text-center ">
            <div class="alerta-d  content-02 p-2" >
                <div class="alert green white-text b-01 sise-t-25" role="alert">
                        <i class="fas fa-exclamation-triangle mr-2"></i> 
                         {{ session()->get('message-create') }}  

                </div>
            </div>
    </div>
 @endif

 @if (session()->has('message-update'))
 <div class="text-center">
         <div class="alerta-d  content-02 p-2" >
             <div class="alert green white-text b-01" role="alert">
                     <i class="fas fa-exclamation-triangle mr-2"></i> 
                        {{ session()->get('message-update') }}
                  
                     
             </div>
         </div>
 </div>
@endif

@if (session()->has('message-delete'))
<div class="text-center">
        <div class="alerta-d  content-02 p-2" >
            <div class="alert red white-text b-01" role="alert">
                    <i class="fas fa-exclamation-triangle mr-2"></i>
                    {{ session()->get('message-delete') }}
                    
            </div>
        </div>
</div>
@endif

{{-- @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif --}}