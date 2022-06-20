import HystModal from 'hystmodal';

function init() {

    let modalsForms = new HystModal({
        linkAttributeName: "data-modal",
        catchFocus: true,
        waitTransitions: true,
        backscroll: false
    });
        
}
  
export default { init }