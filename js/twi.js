let nowIndex = 0;
let isLoading = false;
let LANG = 'zh-TW';

function getData(lang, cb) {
    const clientId = 's44s145uexjgeu9mqqa1s93oc1bnli';
    const limit = 20;
    const game = 'League of Legends';
    isLoading = true;
    $.ajax({
        url: `https://api.twitch.tv/kraken/streams/?client_id=${clientId}&game=${game}&limit=${limit}&offset=${nowIndex}&language=${lang}`,
        success: (response) => {
            console.log(response);
            cb(null, response);
        },
        /*error: (err) => {
            cb(err);
        }*/
        /*success: function(data) {
            console.log(data);
            const streams = data.streams;
            const $row = $('.row');
            for (const stream of streams) {
                $row.append(getColumn(stream));
            }
        }*/
    })
}

function getAvatar(cb) {
    //...一些程式碼
    var lan = "zh-TW";
    cb(lan)
    console.log(lan);

}

function getAvA(cb) {
    //...一些程式碼
    var lan = "en";
    cb(lan)
    console.log(lan);
}

function display(avatar) {
    console.log(avatar)
}

function aaa(data) {
    getAvatar(getData);

}

function bbb() {
    getAvA(getData);

}

function myFunction() {
    location.reload();
}

/*getData((err, data) => {
    // const {streams} = data;
    if (err) {
        console.log(err);
    } else {
        const streams = data.streams;

        const $row = $('.row');
        for (const stream of streams) {
            $row.append(getColumn(stream));
        }
    }
});*/

// return 每一個 col 的 html
function getColumn(data) {
    return `
    <div class="col">
    <a href="${data.channel.url}" target="_blank" class="live" >
  
      <div class="preview">
      <div class="placeholder"></div>
        <img src="${data.preview.medium}"/onload="this.style.opacity=1">
      </div>
      <div class="bottom">
        <div class="intro">
          <div class="logo">
              <img src="${data.channel.logo}" />
          </div>
          <div class="desc">
            <div class="title">
              ${data.channel.status}
            </div>
            <div class="name">
              ${data.channel.display_name}
            </div>
          </div>
        </div>
      </div>
      </a>
    </div>`;
}

function appenData(lang) {
    getData(lang, (err, data) => {
        const { streams } = data;
        const $row = $('.row');
        for (let stream of streams) {
            $row.append(getColumn(stream));
        }
        nowIndex += 10;
        isLoading = false;
    });
}
$(document).ready(function() {
    appenData(LANG);
    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 400) {
            if (!isLoading) {
                appenData(LANG);
            }
        }
    });
})

function changeLang(lang) {
    console.log(lang, )
    $('.menu h1').text(window.I18N[lang]['TITLE']);
    LANG = lang;
    $('.row').empty();
    appenData(LANG);
}