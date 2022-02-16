import publishJob from './publish_job';

const pages = {
    'publique-uma-vaga': {
        init: publishJob,
    }
}

function getSelectedPage(cleanedUrl) {
    let pagesCopy = pages;
    let initFunction;

    cleanedUrl.forEach((element, index, array) => {
      if (pagesCopy[element]) {
        pagesCopy = pagesCopy[element];
      }

      if (index === (array.length - 1)) {
        initFunction = pagesCopy.init;
      }
    });

    return initFunction;
  }

  export default function returnPage(url) {
    const splitedUrl = url.split('/');
    const cleanedUrl = splitedUrl[0].length > 0
      ? splitedUrl
      : splitedUrl.slice(1, splitedUrl.length);

    return getSelectedPage(cleanedUrl)();
  }
