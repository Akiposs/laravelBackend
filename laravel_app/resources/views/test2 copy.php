<!DOCTYPE html>   
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    </head>
    <body>
        <div id="vue-area">
            <child-component
                v-bind:colection = "colection"
            >
            </child-component>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js"></script>
    <script>
        //引数としてどんなプロパティをセットしてやつ必要があって
        //何かした時にどんなイベントと共にどんな値が返るのか
        //をセットにしたまさにオブジェクト
        Vue.component("child-component", {
            props:["colection"],
            template:`
                <ol>
                    <li 
                        v-for="data in filterOnlyJapanese(colection)"
                    >{{ data.text }}</li>
                </ol>
            `,
            methods:{
                filterOnlyJapanese:function(colection){
                    return colection.filter(function(data){
                        return (data.text.match(/[\u{3000}-\u{301C}\u{3041}-\u{3093}\u{309B}-\u{309E}]/mu)) ? true:false
                    })
                }
            }
        })
        var vueObj = new Vue({
            el: '#vue-area',
            data: {
                title:"bind-div",
                text:"こんにちは",
                colection:[
                    {text: "あいうえお"},
                    {text: "yes!"},
                    {text: "やばいぞ！！！"},
                    {text: "No！"},
                ],
                first_no:22,
                second_no:33,
                third_no:44,
                input_data:"山田",
                input_data:"山田",
                submit_status:false,
                alert_message:""
            }
        });

    </script>
</html>
