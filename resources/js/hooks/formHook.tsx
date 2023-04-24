import {ObjectSchema} from "yup";
import {useForm} from "@inertiajs/react";
import {useFormik} from "formik";
import {ChangeEvent, FocusEvent, useEffect} from "react";
import {Method} from "@inertiajs/core";

interface IProps<T> {
    initialValue: T;
    validationSchema: ObjectSchema<any>;
    method: Method,
    submitUrl: string,
}

export function useCustomForm<T>(props: IProps<T>) {
    const inertiaForm = useForm(props.initialValue);

    const formik = useFormik({
        initialValues: inertiaForm.data,
        validateOnChange: false,
        validateOnBlur: false,
        validationSchema: props.validationSchema,
        onSubmit: (value: typeof formik.initialValues) => {
            if(formik.isValid){
               inertiaForm.submit(props.method, props.submitUrl);
            }
        },
    });

    useEffect(()=>{
        formik.setErrors(new Object(inertiaForm.errors) as any);
    }, [inertiaForm.errors])

    const handleChange = (prop, e: ChangeEvent<any>) => {inertiaForm.setData(prop, e.target.value);formik.handleChange(e);}
    const handleFocus = (prop:string, e: FocusEvent<any>) => {formik.handleBlur(e); formik.validateField(prop)}

    return {inertiaForm, formik, handleChange, handleFocus};
}
