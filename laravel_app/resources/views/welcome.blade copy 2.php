<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

    <div id="app">
        <span>@{{ message }}</span>
        <br>
        <span v-bind:title="title">あああ</span>
        <br>
        <span v-if="ex">困ったねー</span>
        <ol>
            <li v-for="test_data in test_array">@{{ test_data.text }}</li>
        </ol>
        <button v-on:click="toggleSpan">ボタン</button>
        <div v-bind:title="text">
            aaaaa
        </div>
        <input type="text" v-model="text">
        <div>@{{ text }}</div>
        <test-component 
            v-for="content in news"
            :content="content"
            :key="content.id"
        ></test-component>
        <div :style="{ fontSize:specifyFontSize+'px' }">
            <child_component
                v-for="data in news"
                :child_data="data"
                :key="data.id"
                v-on:enlarge="controleFontSize"
            >
            </child_component>
            <custom-input
                v-on:input ="searchText = $event"
            ></custom-input>
            <div>@{{ searchText }}</div>
        </div>
        <alert_message>
            やばい！
        </alert_message>
        


    </div>
 

    </body>
    <script>
        // import Child from './test'
        // export default {
        //     name: 'Parent',
        //     components: {
        //         Child
        //     }
        // }
        // import price from './price'
        Vue.component("child_component", {
            props:["child_data"],
            template:`
                <div>
                    <div>@{{ child_data.title }}</div>
                    <div>@{{ child_data.content }}</div>
                    <button v-on:click="$emit('enlarge', 2)">拡大</button>
                    <button v-on:click="$emit('enlarge', -2)">縮小</button>
                </div>
            `
        })

        var alertMessageComponent = {
            template:`
                <div>
                    <strong>Error!</strong>
                    <slot></slot>
                </div>
            `   
        }

        //独自タグを定義してる感じ
        //どんな属性を持っているのかも含めて
        Vue.component('test-component', {
            data:function(){
                return {
                    text_d:"こんにちは",
                }
            },
            props:[
                "content",
            ],
            template: `
                <div style="width:200px">
                    <div style="border:1px solid black">title:@{{ content.title }}</div>
                    <div style="border:1px solid black;height:100px">@{{ content.comment }}</div> 
                </div>
            `
        })
        Vue.component("custom-input", {
            template:`
                <input type="text" 
                    v-on:input="$emit('input', $event.target.value)"
                placeholder="**(px)">
            `
        })
        var app =  new Vue({
            el: '#app',
            components:{
                alert_message: alertMessageComponent
            },
            data: {
                text: "",
                message: 'Hello Vue!',
                title: 'やばすぎるだろ!' + new Date().toLocaleString(),
                ex: false,
                test_array:[
                    {text:"やばい"},
                    {text:"これは"},
                    {text:"すごく"}
                ],
                groceryList:[
                    { id: 0, text: 'Vegetables' },
                    { id: 1, text: 'Cheese' },
                    { id: 2, text: 'Whatever else humans are supposed to eat' }
                ],
                news:[
                    {title:"速報①", comment:"やばいやつ見つけた！"},
                    {title:"速報②", comment:"やばいやつ見つけた！"},
                ],
                specifyFontSize:12,
                searchText:""
            },
            methods:{
                toggleSpan:function(){
                    // this.data.ex = true;
                    this.ex = (this.ex) ? false:true;
                },
                controleFontSize:function(specify_point){
                    this.specifyFontSize += specify_point
                }
            }
        });

    </script>
</html>
