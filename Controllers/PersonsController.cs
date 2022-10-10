using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Data.Entity.Infrastructure;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using MVCRUD2.Models;

namespace MVCRUD2.Controllers
{
    public class PersonsController : Controller
    {
        // GET: Persons
        public ActionResult Index()
        {
            using (Model1 dbmodel = new Model1() ) {
                return View(dbmodel.Persons.ToList());

            }
        }

        // GET: Persons/Details/5
        public ActionResult Details(int id)
        {
            using (Model1 dbmodel = new Model1()) {
                return View(dbmodel.Persons.Where(x => x.ci == id).FirstOrDefault());
            }
           
        }

        // GET: Persons/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Persons/Create
        [HttpPost]
        public ActionResult Create(Person person)
        {
            try
            {
                using (Model1 dbmodel = new Model1())
                {
                    dbmodel.Persons.Add(person);
                    dbmodel.SaveChanges();
                }
                // TODO: Add insert logic here

                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }

        // GET: Persons/Edit/5
        public ActionResult Edit(int id)
        {
            using (Model1 dbmodel = new Model1())
            {
                return View(dbmodel.Persons.Where(x => x.ci == id).FirstOrDefault());
            }
        }

        // POST: Persons/Edit/5
        [HttpPost]
        public ActionResult Edit(int id,Person person)
        {
            try
            {
                using (Model1 dbmodel = new Model1())
                {
                    dbmodel.Entry(person).State = EntityState.Modified;
                    dbmodel.SaveChanges();
                }

                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }

        // GET: Persons/Delete/5
        public ActionResult Delete(int id)
        {

            using (Model1 dbmodel = new Model1())
            {
                return View(dbmodel.Persons.Where(x => x.ci == id).FirstOrDefault());
            }
        }

        // POST: Persons/Delete/5
        [HttpPost]
        public ActionResult Delete(int id,FormCollection collection)
        {
            try
            {
                using (Model1 dbmodel = new Model1())
                {
                    Person person = dbmodel.Persons.Where(x => x.ci == id).FirstOrDefault();
                    dbmodel.Persons.Remove(person);
                    dbmodel.SaveChanges();
                }
                // TODO: Add delete logic here

                return RedirectToAction("Index");
            }
            catch
            {
                return View();
            }
        }
    }
}
