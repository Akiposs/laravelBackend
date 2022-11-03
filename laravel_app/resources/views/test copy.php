<!DOCTYPE html>   
     <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    </head>
    <body>
        <div id="vue-area">
            <div>{{ text }}</div>
            <ol>
                <li v-for="data in colection">{{ data.text }}</li>
            </ol>
            <div v-bind:title="title"></div>
            <button v-on:click="changeTitle">ボタン</button>
            <div>算出プロパティ：{{ total_no }}</div>
            <br>
            <div>v-modelディレクティブ</div>
            <input v-model.number="third_no" type="number">
            <div>{{ third_no }}</div>
            <br>
            <div style="color:red">{{ alert_message }}</div>
            <button v-on:click="delayExecute">送信</button>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js"></script>
    <script>
        var vueObj = new Vue({
            el: '#vue-area',
            data: {
                title:"bind-div",
                text:"こんにちは",
                colection:[
                    {text: "やばい"},
                    {text: "やばい2"},
                    {text: "やばい3"},
                    {text: "やばい4"},
                ],
                first_no:22,
                second_no:33,
                third_no:44,
                input_data:"山田",
                input_data:"山田",
                submit_status:false,
                alert_message:""
            },
            computed:{
                total_no:function(){
                    return this.first_no + this.second_no + this.third_no;
                }
            },

            // created:function(){
            //    this.delayExecute =  _.debounce(this.submitData, 1500);
            // },
            methods:{
                changeTitle:function(){
                    this.title = this.title === "bind-div" ? "clicked-div":"bind-div"
                },
                delayExecute:_.debounce(function(){
                    this.submit_status = (this.submit_status) ? false:true;
                    this.alert_message = "検証中"
                    var vm = this
                    axios.get('https://yesno.wtf/api')
                    .then(function (response) {
                        this.alert_message = _.capitalize(response.data.answer)
                    })
                    .catch(function (error) {
                        this.alert_message = 'Error! Could not reach the API. ' + error
                    })
                    console.log("test");
                }, 1000),
            }
        });

    </script>
</html>
