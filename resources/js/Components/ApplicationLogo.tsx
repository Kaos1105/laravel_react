import {ImgHTMLAttributes} from 'react';
import logo from "../../assets/images/qcsystem_logo.png"
import "@/../scss/Component/ApplicationLogo.scss"

export default function ApplicationLogo({className = '', children, ...props }: ImgHTMLAttributes<HTMLImageElement>) {
    return (
        <img {...props} className={` ` + className} alt="app logo" src={logo}/>
    );
}

