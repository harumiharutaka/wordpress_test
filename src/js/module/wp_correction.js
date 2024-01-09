/*********************************
    WP用 仕様を補正する
*********************************/

export function wpCorrection() {

    //ContactForm7で送信ボタンを押したときにエラーメッセージが出るようにする
    if (document.querySelector(".wpcf7-form")) {
        document.querySelector(".wpcf7-form").classList.add("hide_error_message");

        document.querySelectorAll(".wpcf7-confirm, .wpcf7-submit").forEach(function(elm){
            elm.addEventListener("click", function(){
                document.querySelector(".wpcf7-form").classList.remove("hide_error_message");
            });
        });
    }

}