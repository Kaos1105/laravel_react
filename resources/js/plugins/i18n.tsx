import i18next from "i18next";
// import the original type declarations
import {initReactI18next} from "react-i18next";
// import all namespaces (for the default language, only)
import translationJa from '../locales/ja/translation.json';

const resources = {
    ja: {
        translation: translationJa,
    }
}

i18next.use(initReactI18next).init({
    lng: 'ja',
    resources
});

export default  i18next;
