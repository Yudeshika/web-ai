<script>
    import axios from "axios";

    import { Ziggy } from './ziggy.js';
    const toUppercase = str => str.toUpperCase();

    import Verte from 'verte';
    import 'verte/dist/verte.css';
    // register component globally
  //  Vue.component('verte', Verte);

    export default {
        props: {
            editing: {
                type: Boolean,
                required: false,
                default: true
            },
            folder: {
                type: String,
                required: true,
                default: null
            },
            file: {
                type: String,
                required: true,
                default: null
            },
            access_level: {
                type: Number,
                required: false,
                default: 1
            },
            image: null
        },
        data(){
            return {
                current: 1,
                temp_image: null,
                editables: [],
                images_count: 0,
                editable: false,
                image_width: 0,
                image_height: 0,
                temp_upload_index: 0,
                temp_upload_sub_index: 0,
                empty: [
                    {
                        title: '',
                        description: '',
                        message: '',
                        description1: '',
                        description2: '',
                        image: { src:'', alt: ''},
                        button: { link:'', open: '', text:''},
                        button_learn_more: { link:'', open: '', text:''},
                        button_book_a_meeting: { link:'', open: '', text:''},
                        button_access_portal: { link:'', open: '', text:''},
                    }
                ],
                colors:['#2a317f', '#05a198', '#004fb9', '#941c5e', '#E27DB0', '#39A8E0', '#652581', '#A5BC07']
            }
        },
        methods: {
            editMode() {
                this.openNav();
            },
            saveContent() {
                //Save Content Code Here...

                const data = JSON.stringify(this.editables)
                axios.post(route('json_store'), {
                    json: this.editables,
                    file: this.file,
                    folder: this.folder,
                    access_level: this.access_level
                })
                .then((res) => {
                    this.closeNav();
                })
                .catch(err => {
                    console.log(err)
                });


            },
            openNav() {
                this.$refs.mySidenav.style.display = "block";
                this.$refs.mySidenav.style.width = "350px";
            },
            closeNav() {
                this.$refs.mySidenav.style.width = "0";
                this.$refs.mySidenav.style.display = "none";
            },
            expandNav() {
                if(this.$refs.mySidenav.style.width == "350px") {
                    this.$refs.mySidenav.style.width = "750px";
                    this.$refs.expand_icon.classList.remove('fa-expand-arrows-alt');
                    this.$refs.expand_icon.classList.add('fa-compress-arrows-alt');
                }else{
                    this.$refs.mySidenav.style.width = "350px";
                    this.$refs.expand_icon.classList.remove('fa-compress-arrows-alt');
                    this.$refs.expand_icon.classList.add('fa-expand-arrows-alt');
                }
            },
            toCamelCase(str){
                return str.replace(/_/g," ").replace(/[A-Z]/g, ' $&').replace(/^./, toUppercase)
            },
            handleFileUpload(index, x, y, z, key, key1) {

                for(let i=0; i<this.$refs.file.length; i++){
                    if(this.$refs.file[i].id == "customFile_"+index+"_"+x+"_"+y+"_"+z){
                        let formData = new FormData();
                        formData.append('file', this.$refs.file[i].files[0])
                        formData.append('folder', this.folder)
                        formData.append('access_level', this.access_level)

                        axios.post(route('image_store'), formData)
                        .then((res) => {
                            this.editables[index][key][key1] = res.data;
                            this.$refs.image_ref.value = res.data;
                            this.temp_image = null;
                        })
                        .catch(err => {
                            console.log(err)
                        });
                    }
                }

            },

            handleFileUploadSub(index, x, y, z, key, key1) {

                for(let i=0; i<this.$refs.file.length; i++){
                    if(this.$refs.file[i].id == "customFile_"+index+"_"+x+"_"+y+"_"+z){
                        let formData = new FormData();
                        formData.append('file', this.$refs.file[i].files[0])
                        formData.append('folder', this.folder)
                        formData.append('access_level', this.access_level)

                        axios.post(route('image_store'), formData)
                        .then((res) => {
                            this.editables[index][key][y][key1]["src"] = res.data;
                            this.$refs.image_ref.value = res.data;
                            this.temp_image = null;
                        })
                        .catch(err => {
                            console.log(err)
                        });
                    }
                }
            },
            // handleFileUpload(key, position, divIndex) {

            //     let image_count = this.$refs.file.length / this.editables.length;

            //     //To do try to finf best option rather than this to detect image index in future modifications
            //     let previousCount = 0;
            //     $('.image_input_'+divIndex).each(function() {
            //         if($(this).is(":visible")){
            //             let currPosition = $(this).attr('data-position');
            //             if(currPosition<position){
            //                 previousCount++;
            //             }
            //         }
            //     });
            //     let editingPosition = image_count - (image_count - previousCount);

            //     if(image_count>1) {
            //         let sub_index = ((this.current-1) * image_count) + editingPosition;
            //         if(this.$refs.file[sub_index].files.length>0){
            //             this.image = this.$refs.file[sub_index].files[0]
            //             this.temp_image = URL.createObjectURL(this.image);
            //             this.temp_upload_index = this.current;
            //             this.temp_upload_sub_index = position;
            //         }else{
            //             console.log(this.$refs.file[this.current-1]);
            //         }
            //     }else {
            //         if(this.$refs.file[this.current-1].files.length>0){
            //             this.image = this.$refs.file[this.current-1].files[0]
            //             this.temp_image = URL.createObjectURL(this.image);
            //             this.temp_upload_index = this.current;
            //             this.temp_upload_sub_index = position;
            //         }else{
            //             console.log(this.$refs.file[this.current-1]);
            //         }
            //     }

            // },
            senddata(index, key,  key1) {

                let formData = new FormData();
                formData.append('file', this.image)
                formData.append('folder', this.folder)
                formData.append('access_level', this.access_level)

                axios.post(route('image_store'), formData)
                .then((res) => {
                    this.editables[index][key][key1] = res.data;
                    this.$refs.image_ref.value = res.data;
                    this.temp_image = null;
                })
                .catch(err => {
                    console.log(err)
                });
            },
            async loadData() {
                let response = await axios.get(route("json_read", { folder: this.folder, file: this.file, access_level: this.access_level }));
                this.editables = response.data;
                if(this.editables[0]!=undefined && this.editables[0]["image"]!=undefined){
                    this.image_width = this.editables[0]["image"]["width"];
                    this.image_height = this.editables[0]["image"]["height"];
                    this.temp_image =  'https://dummyimage.com/'+this.image_width+'x'+this.image_height;
                }
            },
            next() {
                if(this.current < this.editables.length){
                    this.current++;
                }
            },
            back() {
                if(this.current > 0) {
                    this.current--;
                }
            },

            plus() {
                const copy = structuredClone(this.editables[0]);
                this.fillEmptyValues(copy);
                this.editables.push(copy);
                this.current = this.editables.length;
            },
            minus() {
                this.editables.splice(this.current-1, 1);
            },
            swapUp() {
                var b = this.editables[this.current-1];
                this.editables[this.current-1] = this.editables[this.current];
                this.$set(this.editables, this.current, b);
            },
            swapDown() {
                var b = this.editables[this.current-1];
                this.editables[this.current-1] = this.editables[this.current-2];
                this.$set(this.editables, this.current-2, b);
            },
            fillEmptyValues(obj) {
                Object.keys(obj).forEach((i) => {
                    if(obj[i] instanceof Object){
                        this.fillEmptyValues(obj[i]);
                    }else{
                        obj[i] = "";
                    }
                });
            },
            addNew(index, key){
                const copy = structuredClone(this.editables[index][key][0]);
                this.fillEmptyValues(copy);
                this.editables[index][key].push(copy);
                // this.editables[index][key].push("");
            },
            remove(index, key, z){
                this.editables[index][key].splice(z, 1);
            }
        },

        async beforeMount() {
            if(!this.editable) {
                let authorized = await axios.get(route("is_an_editor"));
                this.editable = authorized.data;
            }
        },
        watch: {
            file: {
                immediate: true,
                handler (val, oldVal) {
                    console.log('LOADING DATA CALLED...')
                    this.loadData();
                }
            }
        }
    }
</script>

<template>
    <div class="main_box">
        <a class="edit_button" href="javascript:void(0)" @click="editMode" v-if="editable" >
            <i class="fa fa-solid fa-pen"></i>
        </a>
        <span class="centered_loader" v-if="editables==undefined || editables.length==0">
            <img src="/images/placeholder.svg" alt="Loading..."/>
        </span>
        <slot v-else :contents="editables"/>
        <div ref="mySidenav" id="mySidenav" class="sidenav content_editor">
            <label class="title">Site Content Editor</label>
            <a href="javascript:void(0)" class="closebtn" @click="closeNav">&times;</a>
            <a href="javascript:void(0)" class="expandbtn" @click="expandNav">
                <i class="fas fa-expand-arrows-alt" ref="expand_icon"></i>
            </a>

            <div id="editors" ref="editors">

                <div v-if="this.editables.length>1">
                    <nav aria-label="Page navigation example" class="paginate-grid">
                            <a href="javascript:void(0);" @click="plus" class="theme-button theme-primary top_button" title="Add New Block"> + </a>
                            <a href="javascript:void(0);" @click="minus" class="theme-button theme-primary top_button theme-error" style="font-size: 0.7rem !important;" title="Remove Current Block"> × </a>
                            <a href="javascript:void(0);" @click="swapDown" :class="(this.current==1)?'disable':''" class="theme-button theme-primary top_button" style="font-size: 13px !important;" title="Order Move Down">&#9651;</a>
                            <a href="javascript:void(0);" @click="swapUp"  :class="(this.current==this.editables.length)?'disable':''" class="theme-button theme-primary top_button" style="font-size: 13px !important;" title="Order Move Up">&#9661;</a>
                            <ul class="pagination">
                                <li class="page-item" :class="(this.current==1)?'disabled':''">
                                    <a class="page-link" href="javascript:void(0);" @click="back"  aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item disabled"><a class="page-link" href="#"> {{ this.current }} / {{ this.editables.length }}</a></li>
                                <li class="page-item" :class="(this.current==this.editables.length)?'disabled':''">
                                    <a class="page-link" href="javascript:void(0);" @click="next" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                    </nav>
                </div>
                <div class="mb-3" v-for="(editable, index) in this.editables" :key="index" >
                    <div v-if="(editable instanceof Object)">
                        <div class="editing_block" :class="'editing_block_'+index" v-show="current == (index+1)">
                            <div v-for="(key, x) in Object.keys(editable)"  :key="x">
                                <!-- Component Types Editors -->
                                <div v-if="key.startsWith('button') && (editable[key] instanceof Object)">

                                    <label class="label">{{ toCamelCase(key) }}</label>
                                    <div class="mb-3" v-for="(key1, index1) in Object.keys(editable[key])" :key="index1">
                                        <input v-if="key1.startsWith('text')" class="form-control" v-model="editable[key][key1]" placeholder="TEXT"/>
                                        <input v-if="key1.startsWith('link')" class="form-control" v-model="editable[key][key1]" placeholder="LINK"/>
                                        <select v-if="key1.startsWith('open')" class="form-control" v-model="editable[key][key1]">
                                            <option value="_self">Same Tab</option>
                                            <option  value="_blank">New Tab</option>
                                        </select>
                                    </div>
                                </div>
                                <div v-else-if="key.startsWith('image')">
                                    <label class="label">{{ toCamelCase(key) }}</label>
                                    <div class="mb-3" v-for="(key1, index1) in Object.keys(editable[key])" :key="index1">
                                        <input type="file" :id="'customFile_'+index+'_'+x+'_0_0'" ref="file" :data-position="x"  v-if="key1.startsWith('src')" :class="'image_input_'+index+'_'+x+'_0_0'" class="image_input form-control" @change="handleFileUpload(index, x, 0, 0, key, key1)" placeholder="TEXT"/>
                                        <br v-if="key1.startsWith('src')" />
                                        <div v-if="key1.startsWith('src')" class="img_block">
                                            <img v-if="key1.startsWith('src')" :src="(temp_image && temp_upload_index == (index+1) && temp_upload_sub_index == (x)) ? temp_image : editable[key][key1]" class="img img-thumbnail" />
                                            <span v-if="key1.startsWith('src')" class="img_size_guide"> {{ image_width }} X {{ image_height }}</span>
                                        </div>
                                        <!-- <img v-if="key1.startsWith('src')" :src="temp_image" class="img img-thumbnail" /> -->
                                        <br v-if="key1.startsWith('src')" />
                                        <input v-if="key1.startsWith('src')" ref="image_ref" type="hidden" v-model="editable[key][key1]"/>
                                        <button v-if="key1.startsWith('src') && (temp_image && temp_upload_index == (index+1) && temp_upload_sub_index == (x))"  @click="senddata(index, key, key1)" class="hs-button primary btn small">UPLOAD</button>
                                        <br v-if="key1.startsWith('src')" />
                                        <input v-if="key1.startsWith('alt')" class="form-control" v-model="editable[key][key1]" placeholder="ALT"/>
                                    </div>
                                </div>
                                <div v-else-if="key.startsWith('text') && (editable[key] instanceof Object)">
                                    <label class="label">{{ toCamelCase(key) }}</label>
                                    <div class="mb-3" v-for="(key1, index1) in Object.keys(editable[key])" :key="index1">
                                        <input v-if="key1.startsWith('text')" class="form-control" v-model="editable[key][key1]" placeholder="TEXT"/>
                                        <div v-if="key1.startsWith('style')">
                                            <div v-for="(item, y) in editable[key]" v-bind:key="y">
                                                <div v-if="(item instanceof Object)">
                                                    <div class="panel panel-grid">
                                                        <div v-for="(subKey, z) in Object.keys(item)"  :key="z">
                                                            <verte v-if="subKey.startsWith('color')" picker="wheel" :showHistory="true" :colorHistory="colors" model="rgb" v-model="editable[key][key1][subKey]" >
                                                                <svg viewBox="0 0 24 24">
                                                                    <path d="M0 20h24v4H0z"/>
                                                                    <path style="fill: #ffffff" d="M11 3L5.5 17h2.25l1.12-3h6.25l1.12 3h2.25L13 3h-2zm-1.38 9L12 5.67 14.38 12H9.62z"/>
                                                                </svg>
                                                            </verte>
                                                            <input v-if="subKey.startsWith('font-size')" style="width:60px" class="form-inline" v-model="editable[key][key1][subKey]" placeholder="SIZE"/>
                                                            <!-- <input v-if="subKey.startsWith('color')" type="color" class='colorpicker' v-model="editable[key][key1][subKey]" placeholder="COLOR"/> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div v-else>

                                    <div class="multiple_text_block" v-if="editable[key]!=null && Array.isArray(editable[key])" >
                                        <label class="label label-90">{{ toCamelCase(key) }}</label> <button class="theme-button theme-primary button-10" title="Add New Item" @click="addNew(index, key)"> + </button>
                                        <div v-for="(item, y) in editable[key]" v-bind:key="y">
                                            <div v-if="(item instanceof Object)">
                                                <div class="panel">
                                                    <div v-for="(subKey, z) in Object.keys(item)"  :key="z">
                                                        <div v-if="subKey.startsWith('image')">
                                                            <label class="label">{{ toCamelCase(subKey) }}</label>
                                                            <div class="mb-3" v-for="(key1, index1) in Object.keys(editable[key][y][subKey])" :key="index1">
                                                                <input type="file" :id="'customFile_'+index+'_'+x+'_'+y+'_'+z" ref="file" :data-position="z"  v-if="key1.startsWith('src')" :class="'image_input_'+index+'_'+x+'_'+y+'_'+z" class="image_input form-control" @change="handleFileUploadSub(index, x, y, z, key, subKey)" placeholder="TEXT"/>
                                                                <br v-if="key1.startsWith('src')" />
                                                                <div v-if="key1.startsWith('src')" class="img_block">
                                                                    <img v-if="key1.startsWith('src')" :src="(temp_image && temp_upload_index == (index+1) && temp_upload_sub_index == (z)) ? temp_image : editable[key][y][subKey][key1]" class="img img-thumbnail" />
                                                                    <span v-if="key1.startsWith('src')" class="img_size_guide"> {{ image_width }} X {{ image_height }}</span>
                                                                </div>
                                                                <!-- <img v-if="key1.startsWith('src')" :src="temp_image" class="img img-thumbnail" /> -->
                                                                <br v-if="key1.startsWith('src')" />
                                                                <input v-if="key1.startsWith('src')" ref="image_ref" type="hidden" v-model="editable[key][y][subKey][key1]"/>
                                                                <button v-if="key1.startsWith('src') && (temp_image && temp_upload_index == (index+1) && temp_upload_sub_index == (z))"  @click="senddata(index, key, key1)" class="hs-button primary btn small">UPLOAD</button>
                                                                <br v-if="key1.startsWith('src')" />
                                                                <label v-if="key1.startsWith('alt')" class="label"> ALT/Title </label>
                                                                <input v-if="key1.startsWith('alt')" class="form-control" v-model="editable[key][y][subKey][key1]" placeholder="ALT/Title"/>
                                                            </div>
                                                        </div>
                                                        <div v-else-if="subKey.startsWith('button')">
                                                            <label class="label">{{ toCamelCase(subKey) }}</label>
                                                            <div class="mb-3" v-for="(key1, index1) in Object.keys(editable[key][y][subKey])" :key="index1">
                                                                <input v-if="key1.startsWith('text')" class="form-control" v-model="editable[key][y][subKey][key1]" placeholder="TEXT"/>
                                                                <input v-if="key1.startsWith('link')" class="form-control" v-model="editable[key][y][subKey][key1]" placeholder="LINK"/>
                                                                <select v-if="key1.startsWith('open')" class="form-control" v-model="editable[key][y][subKey][key1]">
                                                                    <option value="_self">Same Tab</option>
                                                                    <option  value="_blank">New Tab</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input  v-else v-model="editable[key][y][subKey]" class="form-inline label-90"/><button v-if="!subKey.startsWith('image')" class="theme-button theme-primary button-10 button-error" title="Remove This Item" @click="remove(index, key, y)"> × </button>

                                                    </div>
                                                </div>
                                            </div>
                                            <input v-else v-model="editable[key][y]" class="form-inline label-90"/><button v-if="!(item instanceof Object)" class="theme-button theme-primary button-10 button-error" title="Remove This Item" @click="remove(index, key, y)"> × </button>

                                        </div>
                                    </div>
                                    <div v-else>
                                        <label class="label">{{ toCamelCase(key) }}</label>
                                        <textarea v-if="editable[key]!=null && editable[key].length>100" class="form-control" v-model="editable[key]"></textarea>
                                        <input v-else class="form-control" v-model="editable[key]"/>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <input v-else class="form-control" v-model="editables[index]"/>
                </div>
            </div>
            <button @click="saveContent" class="hs-button primary btn btn-sm"> SAVE CONTENT </button>
            <br/>
        </div>
    </div>
</template>

<style scoped>

    .main_box{
        position: relative;
    }

    .sidenav {
        z-index: 2 !important;
    }

    .sidenav * {
        z-index: 2 !important;
    }

    .btn {
        color:white;
        font-size: 1.4rem;
        background-color: blue;
    }

    .small {
        margin-top: 10px;
        font-size: 1rem;
    }

    .edit_button {
        position: absolute;
        right: 10px;
        top: 3.5rem;
        color: #111;
        /*float: right;*/
        z-index: 1;
    }

    .title{
        position: absolute;
        top: 15px;
        left: 25px;
        color: white;
        font-size: 1.2rem;
    }
    .label {
        color: white;
        font-size: 1rem;
    }

    .multiple_text_block {
        margin-top: 1rem;
    }

    .label-90 {
        width: calc(100% - 25px);
        display: inline;
    }

    .button-10 {
        margin: 3px 0 0 5px;
        font-size: 0.8rem;
        width: 20px;
        padding: 0rem 0.1rem;
        float: right;
        height: 20px;
        line-height: 18px;
        font-family: "Nunito", sans-serif !important;
    }

    .button-error {
        background-color: #494848;
        color: #c3bfbf;
    }

    .content_editor .pagination {
        justify-content: flex-end;
    }

    .paginate-grid {
        display: grid;
        grid-template-columns: 42px 42px 42px 42px 5fr;
    }

    .content_editor .page-link {
        font-size: 0.6rem;

    }

    /* The side navigation menu */
    .sidenav {
        display: none;
        /*height: 100%; /* 100% Full-height */
        width: 0; /* 0 width - change this with JavaScript */
        position: fixed; /* Stay in place */
        z-index: 1; /* Stay on top */
        top: 100px; /* Stay at the top */
        right: 0;
        bottom: 0;
        background-color: #111; /* Black*/
        overflow-x: hidden; /* Disable horizontal scroll */
        padding: 20px;
        padding-top: 60px;
        /*padding-bottom: 60px; /* Place content 60px from the top */
        transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
    }

    /* The navigation menu links */
    .sidenav a {
    /*padding: 8px 8px 8px 32px;*/
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
    }

    /* When you mouse over the navigation links, change their color */
    .sidenav a:hover {
    color: #f1f1f1;
    }

    /* Position and style the close button (top right corner) */
    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    /* Position and style the close button (top left corner) */
    .sidenav .expandbtn {
        position: absolute;
        top: 0;
        left: 5px;
        font-size: 16px;
        margin-left: 0px;
    }

    /* Style page content - use this if you want to push the page content to the right when you open the side navigation */
    #main {
        transition: margin-left .5s;
        padding: 20px;
    }

    /* Editor Pager CSS */

    .editing_block {
        border: 1px solid rgb(229, 243, 251);
        border-radius: 1rem;
        padding: 1rem;
    }

    .editing_block .img_block {
        position: relative;
    }

    .img_size_guide {
        position: absolute;
        top: -1rem;
        right: 10px;
        font-size: 1rem;
        padding: 0.25rem 1rem;
        background-color: aliceblue;
        color: dimgray;
        border: 1px solid #111;
        border-radius: 1rem;
    }

    .centered_loader img{
        display: block;
        margin: auto;
    }

    .btn-sm {
        font-size: 1rem;
        padding: 0.4rem 1rem;
        line-height: 1rem;
    }

    .theme-error {
        background-color: #494848;
        color: white;
        font-size: 1rem !important;
    }

    .top_button {
        height: 20px;
        width: 35px;
        font-size: 1.2rem !important;
        line-height: 18px;
        padding: 0rem 0.5rem;
        font-family: "Nunito", sans-serif !important;
    }

    .disable {
        pointer-events: none;
        cursor: default;
        text-decoration: none;
        color: black;
    }

    .panel {
        border: 1px solid rgb(229, 243, 251);
        border-radius: 0.5rem;
        padding: 0.5rem;
        margin-bottom: 0.5rem;
    }

    .panel-grid >>> .verte__menu-origin {
        position: relative !important;
        transform: translate(calc(-50% + 2.2rem), 1px);
    }

    .panel-grid >>> .verte__menu-origin--bottom {
        margin-top: 50px;
        top: 0;
    }

    .panel-grid >>> .verte__guide svg {
        margin-top: -1rem;
        margin-left: 1rem;
    }

    .panel-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
    }


    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }
        .sidenav a {
            font-size: 18px;
        }
    }

</style>
