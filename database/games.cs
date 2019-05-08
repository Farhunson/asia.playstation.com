using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Asiaplaystation
{
    #region Games
    public class Games
    {
        #region Member Variables
        protected int _games_id;
        protected string _name;
        protected string _genre;
        protected unknown _release_date;
        protected string _provider;
        protected string _platform;
        protected int _price;
        protected string _picture;
        protected string _description;
        #endregion
        #region Constructors
        public Games() { }
        public Games(string name, string genre, unknown release_date, string provider, string platform, int price, string picture, string description)
        {
            this._name=name;
            this._genre=genre;
            this._release_date=release_date;
            this._provider=provider;
            this._platform=platform;
            this._price=price;
            this._picture=picture;
            this._description=description;
        }
        #endregion
        #region Public Properties
        public virtual int Games_id
        {
            get {return _games_id;}
            set {_games_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Genre
        {
            get {return _genre;}
            set {_genre=value;}
        }
        public virtual unknown Release_date
        {
            get {return _release_date;}
            set {_release_date=value;}
        }
        public virtual string Provider
        {
            get {return _provider;}
            set {_provider=value;}
        }
        public virtual string Platform
        {
            get {return _platform;}
            set {_platform=value;}
        }
        public virtual int Price
        {
            get {return _price;}
            set {_price=value;}
        }
        public virtual string Picture
        {
            get {return _picture;}
            set {_picture=value;}
        }
        public virtual string Description
        {
            get {return _description;}
            set {_description=value;}
        }
        #endregion
    }
    #endregion
}