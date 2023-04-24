import i18next from "i18next";
// import the original type declarations
import {initReactI18next} from "react-i18next";
// import all namespaces (for the default language, only)
import translationJa from '../locales/ja/translation.json';
import validationJa from '../locales/ja/validation.json';

export const defaultNS = 'translation'
export const resources = {
    ja: {
        translation: translationJa,
        validation: validationJa
    }
} as const

i18next.use(initReactI18next).init({
    lng: 'ja',
    ns: ['translation', 'validation'],
    defaultNS,
    resources
});

export default i18next;

