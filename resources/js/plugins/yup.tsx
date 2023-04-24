import * as yup from 'yup';
import i18next from '@/plugins/i18n'
import {MessageParams} from "@/types";

yup.setLocale({
    mixed: {
        required: (values: MessageParams) => {
            return i18next.t(values.path) + 'を入力してください';
        },
    },
    number: {
        max: (value) => {
            return i18next.t(value.path)+ `は${value.max}文字（ハイフン含む）以内で入力してください`;
        },
    },
    string: {
        min:(value) =>{
            return i18next.t(value.path)+ `は${value.min}文字以上でなければなりません`;
        },
        max:(value)=>{
            return i18next.t(value.path)+ `は${value.max}文字以内にしてください`;
        }
    }
});

yup.addMethod(yup.string, 'isHiragana', function isHiragana() {
    return this.test((value, testContext) => {
        if(!value.match(/[\u3040-\u309f]/)) return testContext.createError({
            path: testContext.path,
            message:  'よみがなはひらがな、もしくは全角英数字で入力してください'
        });
        return true;
    });
});

export default yup;
