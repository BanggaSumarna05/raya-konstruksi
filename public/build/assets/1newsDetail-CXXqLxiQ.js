import{o as d,c as u,a as m,u as b,b as e,t as o,d as c,F as g,Z as h}from"./app-BYUfHIij.js";/* empty css              */const v={id:"services",class:"services section-bg mb-10",style:{"padding-top":"10%"}},y={class:"container mt-5","data-aos":"fade-down"},w={class:"row justify-content-center"},f={class:"col-9"},p=e("hr",null,null,-1),_={class:"col-9"},x=["src","alt"],j={class:"d-flex justify-content-between align-items-center my-3 text-muted",style:{"font-size":"0.95em"}},k=e("i",{class:"bi bi-person"},null,-1),D=e("i",{class:"bi bi-calendar-event"},null,-1),T=["innerHTML"],L={__name:"1newsDetail",props:{blog:Object},setup(t){function n(s){if(!s)return s;const l=/https?:\/\/(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/shorts\/)([\w-]+)/g;s=s.replace(l,(a,r)=>`
        <div class="ratio ratio-16x9 my-4">
            <iframe src="https://www.youtube.com/embed/${r}"
                title="YouTube video"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
                style="width:100%; height:100%; border:0;">
            </iframe>
        </div>`);const i=/(https?:\/\/[^\s]+?\.(mp4|webm)|\/storage\/[^\s]+?\.(mp4|webm))/g;return s=s.replace(i,a=>`
        <div class="my-4">
            <video controls style="width:100%; border-radius:10px;">
                <source src="${a}" type="video/mp4">
                Browser kamu tidak mendukung video.
            </video>
        </div>`),s}return(s,l)=>{var i;return d(),u(g,null,[m(b(h),{title:t.blog.title},null,8,["title"]),e("section",v,[e("div",y,[e("div",w,[e("div",f,[e("h1",null,o(t.blog.title),1),p]),e("div",_,[e("img",{class:"responsive img-fluid w-100 mb-4",src:t.blog.image?`/storage/${t.blog.image}`:"/assets/img/projects/lotte-catalyst/catalyst (4).jpeg",alt:t.blog.title},null,8,x),e("div",j,[e("div",null,[k,c(" "+o(((i=t.blog.user)==null?void 0:i.name)||"IT Officer"),1)]),e("div",null,[D,c(" "+o(new Date(t.blog.published_at).toLocaleDateString("id-ID",{year:"numeric",month:"long",day:"numeric"})),1)])]),e("div",{innerHTML:n(t.blog.content)},null,8,T)])])])])],64)}}};export{L as default};
