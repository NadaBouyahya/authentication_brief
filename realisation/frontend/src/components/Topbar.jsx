import solicodeLogo from "../assets/solicodeLogo.png";


export default function Topbar(){
    return (
        <div className="topbar_content">
            <div className="topbar_img">
                <img src={solicodeLogo} alt="solicodeLogo" style={{width: '100px'}}/>
            </div>

            <div className="topbar_search_btn">

            </div>
        </div>
    )
}