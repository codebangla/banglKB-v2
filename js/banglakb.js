/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function banglakb(obj_id,bkb_layout){
    if(!obj_id) obj_id = 'content';
    if(!bkb_layout) layout = phonetic;
    jQuery('#'+obj_id).bnKb({
        'switchkey': {
            "webkit":"k",
            "mozilla":"y",
            "safari":"k",
            "chrome":"k",
            "msie":"y"
        },
        'driver': bkb_layout
    });
}

function banglakb_public_comment(layout){
    banglakb('comment',layout);
}
function banglakb_admin_phonetic(){
    banglakb('content',phonetic);

}
function banglakb_admin_probhat(){
    banglakb('content',probhat);
}

function banglakb_toggle(){
    jQuery(this).bnKb.toggle();
}

    
