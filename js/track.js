
const track_form = document.querySelector("#tracking-form");
const input_track = track_form.querySelector("#input_track");
const response_span = track_form.querySelector("#response_span");
const fm_loader = document.querySelector(".loader");

track_form.addEventListener('submit', function(event){
    fm_loader.classList.add('hide');
    event.preventDefault();
    let tracking_details = {
        tracker: input_track.value,
        token: 'xx123ewds'
    }
    
    let promise = $.post('./api/login_api.php',tracking_details);
    promise.then(
        resolve=>{
            if(resolve =='success'){
                window.location='./track.php';
            }else{
                response_span.innerHTML='不正确的追踪号码';
            }
            fm_loader.classList.remove('hide');
            
        },
        err=>{
            fm_loader.classList.remove('hide');
            response_span.innerHTML='手术失败。请刷新';
        }
    );
    if(input_track !=null){

    input_track.addEventListener('focus', function(){
        response_span.innerHTML='';
    });
}

});