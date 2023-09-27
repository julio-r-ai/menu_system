const showLoading = () => {
    const div = document.createElement('div');
    div.classList.add('loadingAnimation');

    const load = document.createElement('div');
    load.classList.add('load');
    
    div.appendChild(load)

    document.body.appendChild(div);

    setTimeout(()=>hideLoading(), 2000);
};

const hideLoading = () => {
    const loadings = document.getElementsByClassName('loadingAnimation');
    if(loadings.length){
        loadings[0].remove();
    }

};
