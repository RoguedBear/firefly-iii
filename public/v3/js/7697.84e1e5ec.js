"use strict";(globalThis["webpackChunkfirefly_iii"]=globalThis["webpackChunkfirefly_iii"]||[]).push([[7697],{7697:(e,t,r)=>{r.r(t),r.d(t,{default:()=>q});var i=r(9835),n=r(6970);const a={class:"row q-mx-md"},c={class:"col-12"},s={class:"text-h6"},u={class:"row"},l={class:"col-12 q-mb-xs"},d=(0,i._)("br",null,null,-1);function o(e,t,r,o,h,g){const p=(0,i.up)("q-card-section"),f=(0,i.up)("q-card"),w=(0,i.up)("q-page");return(0,i.wg)(),(0,i.j4)(w,null,{default:(0,i.w5)((()=>[(0,i._)("div",a,[(0,i._)("div",c,[(0,i.Wm)(f,{bordered:""},{default:(0,i.w5)((()=>[(0,i.Wm)(p,null,{default:(0,i.w5)((()=>[(0,i._)("div",s,(0,n.zw)(h.recurrence.title),1)])),_:1}),(0,i.Wm)(p,null,{default:(0,i.w5)((()=>[(0,i._)("div",u,[(0,i._)("div",l,[(0,i.Uk)(" Title: "+(0,n.zw)(h.recurrence.title),1),d])])])),_:1})])),_:1})])])])),_:1})}var h=r(4352);const g={name:"Show",data(){return{recurrence:{},id:0}},created(){this.id=parseInt(this.$route.params.id),this.getRecurring()},methods:{onRequest:function(e){this.page=e.page,this.getRecurring()},getRecurring:function(){(new h.Z).get(this.id).then((e=>this.parseRecurring(e)))},parseRecurring:function(e){this.recurrence={title:e.data.data.attributes.title}}}};var p=r(1639),f=r(9885),w=r(4458),_=r(3190),m=r(9984),b=r.n(m);const v=(0,p.Z)(g,[["render",o]]),q=v;b()(g,"components",{QPage:f.Z,QCard:w.Z,QCardSection:_.Z})}}]);